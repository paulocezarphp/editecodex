<?php

class Files{
   

   public function Create_File($name_file, $context_file, $path){

       $raiz_file = $path."/".$name_file;
       $file = fopen($raiz_file,'w+');   
       fwrite($file, $context_file);
       fclose($file);

   }

   public function Save_File($name_file, $context_file, $path){

       $raiz_file = $path."/".$name_file;
       $file = fopen($raiz_file,'w+');   
       fwrite($file, $context_file);
       fclose($file);

   }

   public function Open_File($name_file, $path){

       $raiz_file = $path."/".$name_file;
       $file = fopen($name_file, "r");
       $file_context = fread($file, filesize($name_file));
       fclose($file);
       echo $file_context;

   }

   public function Rename_File($name_file, $new_name_file, $path){
       $raiz_file = $path."/".$name_file;
       rename ($raiz_file, $new_name_file);
   }

   public function Copy_File($name_file, $path){
       $raiz_file = $path."/".$name_file;
       copy($raiz_file, $raiz_file);
   }

   public function Delete_File($name_file, $path){
       $raiz_file = $path."/".$name_file;
       echo unlink($raiz_file);
   }

   public function Create_Folder($name_folder, $path, $permission){ 
       //permission (0777)
       $raiz_folder = $name_folder."/".$name_folder;
       mkdir($raiz_folder, $permission, true);
   }

   public function Delete_Folder($name_folder, $path){

   }

   public function Rename_Folder($name_folder, $path){

   }

   public function List_Directory(){

       $path = 'folder/';
       $dir = new DirectoryIterator($path);
       foreach ($dir as $fileInfo) {
           if($fileInfo->getFilename() != "." and $fileInfo->getFilename() != ".."){
               
               $file_size = 0;
               if($dir->getSize() > 1048576000){

                   $file_size = " | ".( number_format($dir->getSize() / 1024, 0, ',', '.') ) ." GB";

               }elseif($dir->getSize() > 1024000){

                   $file_size = " | ".( number_format($dir->getSize() / 1024, 0, ',', '.') ) ." MB";

               }elseif($dir->getSize() > 1024){

                   $file_size = " | ".( number_format($dir->getSize() / 1024, 3) ) ." KB";

               }else{

                   $file_size = " | ".($dir->getSize()) ." bytes";

               }

               if($fileInfo->getType() == "dir"){
                   //dir past   
               }else{
                   //files
               }

               echo $fileInfo->getFilename(); 
               //$file_size -> Size Past       
              
               echo "<br>";
           }

      }   

   }

}

?>