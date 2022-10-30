<!DOCTYPE html>
<html lang="en">
@include('header') // Include header

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    @include('teamseaction')
    <!-- End Our Team Section -->

  </main><!-- End #main -->
  @include('footer') // Include footer

</html>