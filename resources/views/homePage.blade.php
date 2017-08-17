
<section id="intro" class="intro-section">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    @include('section/about-section')
</section>

<!-- beneficiary Section -->
<section id="beneficiary" class="beneficiary-section">
    @include('section/beneficiary-section')
</section>

<!-- Awards Section -->
<section id="awards" class="awards-section">
    @include('section/awards-section')
</section>

<!-- events Section -->
<section id="events" class="events-section">
    <div class="section-container">
        <div class="container">
            <div class="row">
                <div class="title-page">
                    <h1>The Events</h1>
                </div>
                <div class="events-content">


                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contacts" class="contacts-section">
    @include('section/contacts-section')
</section>

<script>
    $(document).ready(function () {

        // for partners carousel
        $('#myCarousel').carousel({
            interval: 4000
        })
        $('.carousel-control.right').click(function(){ $('#myCarousel').carousel('next')});
        $('.carousel-control.left').click(function(){ $('#myCarousel').carousel('prev')});

        $('#myCarousel .item').each(function(){
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i=0;i<2;i++) {
                next=next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    // for partners carousel
    });
</script>