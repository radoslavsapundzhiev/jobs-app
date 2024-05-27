<section class="hero has-background-grey block">
    <div class="hero-body">
      <p class="title has-text-centered has-text-light">Jobs App</p>
      <p class="subtitle has-text-centered has-text-light">Find or post a job</p>
      <div class="has-text-centered">
        @auth
        @else
          <a href="/register" class="button has-background-grey has-text-light "><i class="fa-solid fa-user-plus"></i> Sign Up to post job </a>
        @endauth
      </div>
    </div>
</section>