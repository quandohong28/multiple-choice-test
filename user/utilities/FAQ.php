<style>
  @import url("https://fonts.googleapis.com/css?family=Montserrat");


  h1 {
    text-align: center;
    margin: 2rem 0;
    font-size: 2.5rem;
  }

  .accordion {
    width: 90%;
    max-width: 1000px;
    margin: 2rem auto;
  }

  .accordion-item {
    background-color: #fff;
    color: #111;
    margin: 1rem 0;
    border: none;
    border-top: 1px #9f9c9c;
    border-bottom: 1px #9f9c9c;
  }

  .accordion-item:first-of-type {
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
  }

  .accordion-item-header {
    padding: 0.5rem 3rem 0.5rem 1rem;
    min-height: 3.5rem;
    line-height: 1.25rem;
    font-weight: bold;
    display: flex;
    align-items: center;
    position: relative;
    cursor: pointer;
  }

  .accordion-item-header::after {
    content: "\002B";
    font-size: 1.6rem;
    position: absolute;
    left: 1rem;
    bottom: 1.2rem;
  }

  .accordion-item-header.active::after {
    content: "\2212";
  }

  .accordion-item-body {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
  }

  .accordion-item-body-content {
    text-align: start;
    margin-left: 40px;
    padding: 1rem;
    line-height: 1.5rem;
    border-top: 1px solid;
    border-image: linear-gradient(to right, transparent, #34495e, transparent) 1;
  }

  @media (max-width: 767px) {
    html {
      font-size: 14px;
    }
  }
</style>
<section>
  <div class="accordion">
    <?php
    foreach ($FAQs as $FAQ) :
      extract($FAQ);
    ?>
      <div class="accordion-item">
        <div class="accordion-item-header">
          <p class="ms-4 mb-0"><?= $content ?></p>
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <p class="ms-4 mb-0"><?= $answer ?></p>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</section>
<script>
  const accordionItemHeaders = document.querySelectorAll(
    ".accordion-item-header"
  );

  accordionItemHeaders.forEach((accordionItemHeader) => {
    accordionItemHeader.addEventListener("click", (event) => {
      // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

      const currentlyActiveAccordionItemHeader = document.querySelector(
        ".accordion-item-header.active"
      );
      if (
        currentlyActiveAccordionItemHeader &&
        currentlyActiveAccordionItemHeader !== accordionItemHeader
      ) {
        currentlyActiveAccordionItemHeader.classList.toggle("active");
        currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
      }
      accordionItemHeader.classList.toggle("active");
      const accordionItemBody = accordionItemHeader.nextElementSibling;
      if (accordionItemHeader.classList.contains("active")) {
        accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        icon1.style.display = "none";
        icon2.style.display = "block";
      } else {
        accordionItemBody.style.maxHeight = 0;
        icon1.style.display = "block";
        icon2.style.display = "none";
      }
    });
  });
</script> 