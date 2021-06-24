<!-- Site main -->
<main id="site_main">

    <!-- cards album -->
    <div class="card" v-for="disc in discs">
        <img width="160px" :src="disc.poster" alt="disc cover image">
        <div class="title">{{disc.title}}</div>
        <div class="author">{{disc.author}}</div>
        <div class="year">{{disc.year}}</div>
    </div>
    <!-- /cards album -->

</main>
<!-- /Site main -->