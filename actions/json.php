<?php

if (!empty($_POST)) {
  //print_r($_POST);
  
  $data = array(
    'content' => array(
      'date' => $_POST['calendar'],
      'note' => $_POST['note'],
    ),
  );
  
  //$data = array_push($data['content']);
  
  $json = json_encode($data);
  $file = 'output.json';
  file_put_contents($file, $json, FILE_APPEND);
  header('http://localhost/lab_1');
  print('<h2>Data generated successfully. You can download by  <a href="http://localhost/lab_1/actions/'.$file.'">click</a></h2>');
}