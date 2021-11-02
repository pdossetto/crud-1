<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('pagina-home') }}">Le mie Paste</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('pagina-home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pastas.create')}}">Inserisci una pasta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pastas.index') }}">Lista delle paste</a>
        </li>
      </ul>
    </div>
  </nav>
</div>