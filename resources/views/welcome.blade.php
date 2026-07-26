<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Laravel starter application running on Wodby.">
    <title>{{ config('app.name', 'Laravel') }} on Wodby</title>
    <link rel="stylesheet" href="{{ asset('welcome.css') }}">
  </head>
  <body>
    <main class="page-shell">
      <section class="hero" aria-labelledby="page-title">
        <div class="eyebrow">
          <span class="status-dot" aria-hidden="true"></span>
          Deployment healthy
        </div>
        <p class="framework">Laravel + Wodby</p>
        <h1 id="page-title">Your Laravel app is running.</h1>
        <p class="intro">
          The application has been built and deployed successfully. Start with
          the root route, connect your product domain, and make this project
          your own.
        </p>
        <div class="actions">
          <a class="button button-primary" href="https://laravel.com/docs/13.x">
            Build with Laravel
          </a>
          <a class="button button-secondary" href="https://wodby.com/docs/2.0/">
            Explore Wodby
          </a>
        </div>
      </section>

      <section class="next-steps" aria-labelledby="next-steps-title">
        <div class="section-heading">
          <p class="section-number">01</p>
          <h2 id="next-steps-title">Make it yours</h2>
        </div>
        <ol class="step-grid">
          <li>
            <span class="step-label">Create a controller</span>
            <code>php artisan make:controller HomeController</code>
          </li>
          <li>
            <span class="step-label">Add your first model</span>
            <code>php artisan make:model Product -m</code>
          </li>
          <li>
            <span class="step-label">Keep it green</span>
            <code>php artisan test</code>
          </li>
        </ol>
      </section>
    </main>

    <footer>
      <span>Laravel v{{ app()->version() }}</span>
      <a href="{{ route('healthz') }}">Health check</a>
    </footer>
  </body>
</html>
