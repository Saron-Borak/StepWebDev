<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="contact.css" />
  </head>
  <body>
  <?php include ('header.php') ?>
    <section id="hero">
      <div class="default-padding">
        <div>CONTACT</div>
      </div>
      <p>Don't Hesitate to Contact Us.</p>
    </section>

    <!-- send us a message -->
    <section id="send">
      <div class="sideright">
        <div class="ff">
          <div>SEND US A MESSAGE</div>
        </div>
        <form action="" class="text">
          <div class="mm">
            <input type="text" placeholder="Full Name" />
            <input type="text" placeholder="Email" />
          </div>
          <textarea
            class="row"
            name=""
            id=""
            placeholder="Message"
            rows="10"
          ></textarea>
        </form>
      </div>

      <div class="sideleft">
        <div class="tittle">
          <p>FRESHCERY</p>
          <p>HEADQUARTER</p>
        </div>
        <div class="tittle2">
          <p>JI. Petani No. 159, Cibabat</p>
          <p>Cimahi Utara</p>
          <p>Kola cmani</p>
          <p>Jawa Barat 40513</p>
        </div>
        <div class="tittle3">
          <p>0898986362</p>
          <p>hello@freshcery.com</p>
        </div>
      </div>
    </section>
    <button class="button">Send</button>

    <!-- map -->
    <div class="map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3908.8252203004736!2d104.90435632534765!3d11.564384165909209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdepo%20market!5e0!3m2!1sen!2skh!4v1738994220888!5m2!1sen!2skh"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
    
    <?php include ('footer.php') ?>
  </body>
</html>
