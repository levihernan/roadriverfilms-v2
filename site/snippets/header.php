<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google" content="notranslate">

<title>Road River Films</title>

<meta property="og:url"                content="http://www.roadriverfilms.com" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="Road River Films" />
<meta property="og:description"        content="River Road Films was founded in 2020 by Afsun Moshiry an Iranian - German Curator, Producer and director of film and cultural projects." />
<meta property="og:image" itemprop="image"              content="http://www.roadriverfilms.com/img/logo.png" />


<style>
@import url('https://fonts.googleapis.com/css2?family=Libre+Barcode+128+Text&display=block');

* {
  box-sizing: border-box;
  font-family: sans-serif;
}

body {
  margin: 0;
  font-family: system-ui;
  font-weight: 100;
  font-size: 1em;
  height: 100vh;
}

h1 {
    font-weight: 200;
    font-family: "Libre Barcode 128 Text";
    font-size: 3em;
    text-align: center;
    user-select: none;
}

#myVideo {
  position: fixed;
  right: 50%;
  bottom: 0;
  transform: translatex(50%);
  box-shadow: 0 0 10px -5px;
  /* min-width: 100%; */
  min-height: 100%;
  z-index: -1;
}

.content {
  width: 100%;
  max-width: calc((100vw - 540px) / 2);
  padding: 20px 50px;
  z-index: 99;
  display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    height: 100%;
}

.content-right{
  margin-left: auto;
}

.content p {
  /* max-width: 30%; */
  /* margin: auto; */
  font-size: 0.9em;
  text-align: left;
  z-index: 99
}

.quote{
  font-weight: bold
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

.quoted{
  text-align: right;
    width: 100%;
    display: block;
}
p.right{
  text-align: right;
}
.flexbox{
  display: flex;
  flex-direction: row;
  height: 100%;
}

.section-link{
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 24px;
}
.section-text{
  font-size: 20px;
  line-height: 20px;
  padding: 5px;
}
.smol-bold{
  font-weight: 500
}

@media screen and (max-width: 1100px) {
  #myVideo{
    position: relative;
    transform: none;
    right: auto;
    bottom: auto;
    width: 100%;
  }
  body{
    height: auto;
  }
  .content{
    max-width: none;
    /* min-height: 70vh; */
    padding: 100px 20px;
  }
  .content p{
    max-width: 700px;
    margin: 20px auto;
  }
}
</style>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G0CNRP6QFL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G0CNRP6QFL');
</script>

<?php echo js('assets/js/jquery-1.12.1.min.js') ?>

</head>
<body>
