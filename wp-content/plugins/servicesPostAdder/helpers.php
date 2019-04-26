<?php

function view($path, $data = array())
{
    extract($data);
    include(RAT_VIEW_DIR . $path . '.html.php');
}

function extract_data_attr(string $key, array $data)
{
    if (array_key_exists($key, $data)) {
        return esc_attr($data[$key][0]);
    }
    return '';
}

function update_post_metas($post_id, $data)
{
    foreach ($data as $key => $value) {
        update_post_meta($post_id, $key, $value);
    }
}

function post_data($key, $data)
{
    if (array_key_exists($key, $data)) {
        return sanitize_text_field($data[$key]);
    }
    return '';
}

function mail_template($path,$data = array())
{
  ob_start();
  extract($data);
  include(RAT_VIEW_DIR . $path . '.html.php');
  return ob_get_clean();
}