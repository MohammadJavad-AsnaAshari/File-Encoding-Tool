# File Encoding Tool

This PHP script allows you to convert the character encoding of a text file from WINDOWS-1256 to UTF-8.

## Prerequisites

- PHP 7.0 or later installed on your system.

## Usage

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/yourusername/your-repo.git

2. Navigate to the project directory:
    ```bash
   cd your-repo

3. Run the PHP script and provide the input file name as a command-line argument:
    ```bash
   php encode.php "Your_File_Name.srt"

> Tip: Replace Your_File_Name.srt with the name of the file you want to encode. Make sure the file is in the same directory as
the encode.php script.

4. The script will create two new files with the encoded content:
* Your_File_Name_UTF-8.srt: The encoded file in UTF-8 format.
* Your_File_Name_WINDOWS-1256.srt: The encoded file in WINDOWS-1256 format.

5. You can find the encoded files in the same directory where the input file is located.

## Note
Always make a backup of your original file before running the encoding process to avoid accidental data loss.

