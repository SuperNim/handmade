<?php
function newPDO () {
return new PDO("mysql:host=localhost;dbname=testBD", "root", "");
}