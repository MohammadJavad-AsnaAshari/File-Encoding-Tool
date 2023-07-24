<?php
// Function to print colored text in the terminal
function printColoredText($text, $color)
{
    $colors = [
        'black' => '0;30',
        'red' => '0;31',
        'orange' => '0;33;91',
        'green' => '0;32',
        'yellow' => '0;33',
        'blue' => '0;34',
        'purple' => '0;35',
        'cyan' => '0;36',
        'white' => '0;37',
    ];

    if (isset($colors[$color])) {
        echo "\033[" . $colors[$color] . "m" . $text . "\033[0m";
    } else {
        echo $text;
    }
}

// Check if the input file name is provided as a command-line argument
if (empty($argv[1])) {
    echo "Please provide the input file name as a command-line argument." . "\n";
    printColoredText('Usage: $ php encode.php "FILE NAME" ' . "\n", "orange");
    exit;
}

// Get the input file name from the command-line argument
$inputFileName = $argv[1];

// Check if the input file exists
if (!file_exists($inputFileName)) {
    echo "Input file not found! \n";
    exit;
}

// Function to encode the file
function encodeFile($inputFile, $fromEncoding, $toEncoding, $outputFile)
{
    // Read the content from the input file
    $content = file_get_contents($inputFile);

    // Convert the content to the desired encoding
    $encodedContent = iconv($fromEncoding, $toEncoding . '//TRANSLIT', $content);

    // Write the encoded content to the output file
    file_put_contents($outputFile, $encodedContent);
}

// Encode the file to UTF-8
encodeFile($inputFileName, 'WINDOWS-1256', 'UTF-8', $inputFileName . '_UTF-8.srt');

// Encode the file to WINDOWS-1256
//encodeFile($inputFileName, 'UTF-8', 'WINDOWS-1256', $inputFileName . '_WINDOWS-1256.srt');

echo "File has been successfully encoded to UTF-8. \n";
?>
