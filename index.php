<?php
  require 'classes/Curl.php';
  $linkImg

?>

<!doctype html>
  <head>
    <title><?php echo title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>

<div class=containertxt>
  <h1>My Gallery</h1>
</div>
<?php
  require 'Curl.php';
  $linkImg

?>

<!doctype html>
  <head>
    <title><?php echo title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
  </head>
<body>

<div class=containertxt>
  <h1>My Gallery</h1>
</div>



<div class="photoContainer">
  <?php for ($n=0; $n<9; $n++)
  { //Select the rights and unique array, which I get from http://picsum.photos/list/(JSON). ?>
    <div class = "container">
      <a data-fancybox="gallery" href="<?php echo $linkImg[$n]['post_url'].'/download'  ?>">
          <img class="photo" src="<?php echo $linkImg[$n]['post_url'].'/download' //output image url via unique array from selected key?>">
      </a>
        <p>Author: <a href="<?php echo $linkImg[$n]['author_url'] ?>">  <?php echo $linkImg[$n]['author']// the same array output another data from another key ?></a></p>
        <p> Original resolution: <?php echo $linkImg[$n]['width'].'x'.$linkImg[$n]['height']?>
  </div>
<?php  } ?>

</div>



<style>
.photo
{
width: 300px;
height: 180px;
}
.container
{
margin: 2%;
  width: 300px;
  float: left;
}

div.photoContainer
{
  text-align: center;
  max-width: 1200px;
  margin: 0 auto;
}


  @media screen and (max-width:374px)
  {

  }


  /* K */
  @media screen and (min-width: 1441px)
  {
    div.containertxt
    {
      height: 10em;
      position: relative
    }
  }


  /* Laptop L */
  @media screen and (min-width: 1023px) and (max-width: 1440px)
  {

    div.containertxt
    {
      height: 10em;
      position: relative
    }

    div.containertxt h1
    {
      font-size: 4em;
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)
     }
   }

   /* Laptop */
  @media screen and (min-width: 769px) and (max-width: 1024px)
  {
    div.containertxt
    {
      height: 10em;
      position: relative
    }

    div.containertxt h1
    {
      font-size: 3em;
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)
    }
  }




  /* tablet */
  @media screen and (min-width: 424px) and (max-width: 768px)
  {
    div.containertxt
    {
      height: 10em;
      position: relative
    }
    div.containertxt h1
    {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)
    }
  }



   /* mobile L */
   @media screen and (min-width: 376px) and (max-width: 425px)
   {

     div.containertxt
     {
       height: 10em;
       position: relative
     }

     div.containertxt h1
     {
       margin: 0;
       position: absolute;
       top: 50%;
       left: 50%;
       margin-right: -50%;
       transform: translate(-50%, -50%)
     }
}


        /*other*/
      @media screen and (min-width: 100px) and (max-width: 375px)
      {

        div.containertxt
        {
          height: 10em;
          position: relative
        }

        div.containertxt h1
        {
          margin: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          margin-right: -50%;
          transform: translate(-50%, -50%)
        }


   }

</style>

</body>
</html>

<div class="useragent">
  <div class="K">
    <p>

      Page version for "4K" devices.
    </p>
  </div>

  <div class="Ll">
    <p>
      Page version for "Laptop L" devices.
    </p>
  </div>

  <div class="L">
    <p>
      Page version for "Laptop" devices.
    </p>
  </div>

  <div class="T">
    <p>
      Page version for "Tablet" devices.
    </p>
  </div>
  <div class="M">
    <p>
      Page version for "Mobile" devices.
    </p>
  </div>
  <div class="other">
    <p>
      I don't support calculators. Please open this page on your smartphone or laptop.
    </p>
  </div>
</div>




<div class="photoContainer">
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
  <img class="photo" src=<?php echo $linkImg ?>>
</div>


<style>
  @media screen and (max-width:374px)
  {
    div.photoContainer
    {
      display: none;
    }
  }


  /* K */
  @media screen and (min-width: 1441px)
  {
    div.containertxt
    {
      height: 10em;
      position: relative
    }
    div.containertxt h1
    {
      font-size: 5em;
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)
    }

      IMG.photo
      {
        margin: 3%;
      }

      div.photoContainer
      {
      }
      div.K
      {
        display: flex;
        text-align: center;
      }
      div.Ll
      {
        display: none;
      }
      div.L
      {
        display: none;
      }
      div.T
      {
        display: none;
      }
      div.M
      {
        display: none;
      }
      div.other
      {
        display: none;
      }
   }

  /* Laptop L */
  @media screen and (min-width: 1023px) and (max-width: 1440px)
  {

    div.containertxt
    {
      height: 10em;
      position: relative
    }

    div.containertxt h1
    {
      font-size: 4em;
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)
     }

      IMG.photo
      {
        margin: 2%;
      }

      div.photoContainer
      {
      }

      div.K
      {
        display: none;
      }
      div.Ll
      {
        display: flex;
        text-align: center;
      }
      div.L
      {
        display: none;
      }
      div.T
      {
        display: none;
      }
      div.M
      {
        display: none;
      }
      div.other
      {
        display: none;
      }
   }
   /* Laptop */
  @media screen and (min-width: 769px) and (max-width: 1024px)
  {
    div.containertxt
    {
      height: 10em;
      position: relative
    }

    div.containertxt h1
    {
      font-size: 3em;
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)
    }

      IMG.photo
      {
        margin: 1%;
      }

      div.photoContainer
      {

      }
      div.K
      {
        display: none;
      }
      div.Ll
      {
        display: none;
      }
      div.L
      {
        display: flex;
        text-align: center;
      }
      div.T
      {
        display: none;
      }
      div.M
      {
        display: none;
      }
      div.other
      {
        display: none;
      }
   }

  /* tablet */
  @media screen and (min-width: 424px) and (max-width: 768px)
  {
    div.containertxt
    {
      height: 10em;
      position: relative
    }
    div.containertxt h1
    {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)
    }

      IMG.photo
      {
        margin: 2%;
      }

      div.photoContainer
      {
      }
      div.K
      {
        display: none;
      }
      div.Ll
      {
        display: none;
      }
      div.L
      {
        display: none;
      }
      div.T
      {
        display: flex;
         text-align: center;
      }
      div.M
      {
        display: none;
      }
      div.other
      {
        display: none;
      }
   }

   /* mobile L */
   @media screen and (min-width: 376px) and (max-width: 425px)
   {

     div.containertxt
     {
       height: 10em;
       position: relative
     }

     div.containertxt h1
     {
       margin: 0;
       position: absolute;
       top: 50%;
       left: 50%;
       margin-right: -50%;
       transform: translate(-50%, -50%)
     }

      IMG.photo
      {
        margin: 6%;
      }

       div.photoContainer
      {
      }

      div.K
      {
        display: none;
      }
      div.Ll
      {
        display: none;
      }
      div.L
      {
        display: none;
      }
      div.T
      {
        display: none;
      }
      div.M
      {
        display: flex;
         text-align: center;
      }
      div.other
      {
        display: none;
      }
    }
        /*other*/
      @media screen and (min-width: 100px) and (max-width: 375px)
      {

        div.containertxt
        {
          height: 10em;
          position: relative
        }

        div.containertxt h1
        {
          margin: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          margin-right: -50%;
          transform: translate(-50%, -50%)
        }
        div.photoContainer
       {
         display: none;
       }

       div.K
       {
         display: none;
       }
       div.Ll
       {
         display: none;
       }
       div.L
       {
         display: none;
       }
       div.T
       {
         display: none;
       }
       div.M
       {
         display: none;
       }
       div.other
       {
         display: flex;
         text-align: center;
       }
   }
   div.useragent
   {
     margin-left: 70%;
    text-align: center;
    align: center;

   }
   div.photoContainer
   {
     text-align: center;
   }
</style>

</body>
</html>
