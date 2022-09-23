<?php

$target_dir = "uploads/";
$target='uploads/'.basename($_FILES['UploadFileName']['name']);
$target_file = $target_dir . basename($_FILES["UploadFileName"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(move_uploaded_file($_FILES['UploadFileName']['tmp_name'], $target)) {

    // echo $target;
}


require("doc2txt.class.php");

//$docObj = new Doc2Txt("test.docx");
$docObj = new Doc2Txt($target);

$text = $docObj->convertToText();
//echo $txt;



// include 'pdfparser/vendor/autoload.php';

// // Parse pdf file and build necessary objects.
// $parser = new \Smalot\PdfParser\Parser();
// $pdf    = $parser->parseFile( $target);
 
// // // Retrieve all details from the pdf file.
// // $details  = $pdf->getDetails();
 
// // // Loop over each property to extract values (string or array).
// // foreach ($details as $property => $value) {
// //     if (is_array($value)) {
// //         $value = implode(', ', $value);
// //     }
// //     echo $property . ' => ' . $value . "\n";
// // }

// // Retrieve all pages from the pdf file.
// $pages  = $pdf->getPages();
 

// // Loop over each page to extract text.
// foreach ($pages as $page) {
//     //echo $page->getText();
//     $body = $page->getText();
// }




//$sentences = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $text);
$array = explode('\n\n', $text);
print_r($array);

    // // $node = node_load($nid);
    // // $body = $node->body;

    // $body = strip_tags($body);

    // preg_match_all("/[\r\n]/", $body, $subs, PREG_OFFSET_CAPTURE);

    // foreach ($subs[0] as $key => $value) {
    //     if ($value[1] == (($subs[0][$key+1][1]) - 1) AND $value[1] == (($subs[0][$key+2][1]) - 2)) {
    //       $limits[] = $value[1];
    //     }
    // }

    // $limits[] = strlen($body);

    // $from = 0;
    // $paragraphs = array();
   
    // foreach ($limits as $r => $value) {
    //     $paragraphs[] = trim(substr($body, $from, ($value-$from)));
    //     $from = $value;
    // }

    print_r($paragraphs);

?>