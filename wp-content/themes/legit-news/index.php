<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="style.scss">
</head>
<body>
    <div>
	<?php
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Inconsolata|Merriweather');

$body: 'Inconsolata', monospace;
$big: 'Merriweather', serif;

$white: #ffffff;
$primary: #F2DAD7;
$secondary: #D1A39E;
$light: #CECDCA;
$dark: #474545;

$ease: all 0.3s ease-in-out;

body {
  font-family: $body;
  margin: 0;
}

button {
  cursor: pointer;
}

#portfolio {
  width: 100%;
  min-height: 100vh;
  background: $white;
  position: relative;
  display: grid;
  grid-template-columns: repeat(4, minmax(200px, 1fr));
  grid-template-rows: 1fr 1fr;
  grid-gap: 2px;
}
.project {
  position: relative;
  background: $primary;
  overflow: hidden;
  img {
    position: absolute;
    opacity: 0.9;
  }
  p {
    position: absolute;
    text-align: center;
    width: 100%;
    padding: 1em 0;
    text-transform: uppercase;
    letter-spacing: 2px;
    z-index: 3;
  }
  .grid__title {
    position: absolute;
    width: 100%;
    text-align: center;
    white-space: nowrap;
    bottom: 0;
    font-weight: 100;
    font-size: 0.8em;
    z-index: 3;
    text-transform: uppercase;
    color: $dark;
    letter-spacing: 2px;
  }
}

// project hover overlay
.project:hover .grid__overlay {
  transform: translateY(0%);
}

.grid__overlay {
  background: rgba(darken($primary, 10%), .9);
  height: 100%;
  grid-column: 1 / -1;
  grid-row: 1 / -1;
  position: relative;
  display: grid;
  justify-items: center;
  align-items: center;
  transform: translateY(101%);
  transition: $ease;
  button {
    background: none;
    outline: none;
    font-weight: 100;
    letter-spacing: 2px;
    border: 1px solid $white;
    color: $white;
    text-transform: uppercase;
    padding: 10px;
    &:hover {
      transition: $ease;
      background: $white;
      color: $secondary;
      transform: scale(1.05);
    }
  }
}

//project popup overlay

.overlay {
  position: fixed;
  background: rgba($dark, 0.7);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: none;
  z-index: 3;
}
.overlay.open {
  display: grid;
  align-items: center;
  justify-items: center;
}

.overlay__inner {
  background: $white;
  width: 700px;
  padding: 20px;
  position: relative;
  opacity: 1;
}

.close {
  position: absolute;
  top: 3px;
  right: 10px;
  background: none;
  outline: 0;
  color: $dark;
  border: 0;
  text-transform: uppercase;
  letter-spacing: 2px;
  &:hover {
    color: $secondary;
  }
}

.project__image {
  margin-left: -50%;
}
</style>
require('db_product.php');


?>
    </div>
</body>
</html>