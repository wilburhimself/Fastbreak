<?php
    function form($model) {
        $form = array();
        if ($model->errors) {
            $form[] = errors($model->errors);
        }
        foreach ($model->fields as $label => $field) {
            if ($field['type'] == "string" || $field['type'] == "text") {
                $form[] = '<p>'.create_field($label, $field['type'], $model->$label).'</p>';
            } elseif ($field['type'] == 'foreign') {
                $form[] = '<p>'.collection_select($model, new $field['class'], $field['label'], $field['display']).'</p>';
            }
        }
        if (isset($model->id)) {
            $form[] = '<input type="hidden" name="id" value="'.$model->id.'" />';
        }
        return join("\n", $form);
    }

    function collection_select($instance, $object, $label, $display) {
        $output = '<label for="object_'.$label.'">'.ucwords($label).'</label>';
        $output .= '<select name="object['.$label.']" id="object_'.$label.'">';
            $p = $object->get();
            foreach ($p as $option) {
                $output .= '<option value="'.$option->id.'"';
                    if ($option->id == $instance->$label) $output .= ' selected="selected" ';
                $output .= '>'.$option->$display.'</option>';
            }
        $output .= '</select>';
        return $output;

    }

    function create_field($label, $type, $value="") {
        if ($value == "" && isset($_POST['object'][$label])) {
            $value = $_POST['object'][$label];
        }

        $output = '<label for="object_'.$label.'">'.ucwords($label).'</label>';
        if ($type == 'string') {
            $output .= '<input id="object_'.$label.'" type="text" value="'.$value.'" name="object['.$label.']" />';
        }
        if ($type == 'text') {
            $output .= '<textarea name="object['.$label.']" id="object_'.$label.'">'.$value.'</textarea>';
        }
        return $output;
    }
?>