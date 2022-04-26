<?php
      $constantVar = 12345;

      function utilFunc($timezone) {
            echo "<br> $timezone";
      }

      class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages)
            {
                  $this->title = $aTitle;
                  $this->author = $aAuthor;
                  $this->pages = $aPages;
                  // echo "Created new book <br>";
            }
      }
?>