<?php
    $path = '/dir/myfile.php';
    $file = 'file1.txt';

    /*

    // return filename 
    echo basename($path);

    // return filename without extension 
    echo basename($path, '.php'); 
    

    // return dir name from path 

    echo dirname($path);


    // check if file exists 
    echo file_exists($file);

   

    // Get absolute file 

    echo realpath($file);


    //  check to see if file exists 

    echo is_file($file); //for file

    echo file_exists('test'); // for folder

     

    //  check if writeable 
    echo is_writable($file);

    // get file size 
 
    echo filesize($file);

    // create a directory 
    mkdir('testing');


    // delete directory  if empty

    rmdir('testing');
    

    // copy file 

    echo copy('file1.txt', 'file2.txt'); 


// rename file 

    rename('file2.txt', 'myfile.txt');


// Delete file 

unlink('myfile.txt');



// Write from file to string 
echo file_get_contents($file);



// write string to file (appends file )
echo file_put_contents($file, 'Goodbye World');



$current = file_get_contents($file);

$current .= ' Goodbye World';

file_put_contents($file, $current);



// open file for reading 

$handle =fopen($file, 'r');
$data = fread($handle, filesize($file));
echo $data;
*/

// open file for writing 

$handle = fopen('file2.txt', 'w');
$txt = "JOhn Doe \n";
fwrite($handle, $txt);
$txt = "Steve Smith \n";
fwrite($handle, $txt);
fclose($handle);

?>