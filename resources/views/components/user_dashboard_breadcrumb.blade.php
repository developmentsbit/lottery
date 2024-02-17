<div class="page-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('member.dashboard') }}">Home</a></li>
          @if(isset($title2))
          <li class="breadcrumb-item">{{ $title2 }}</li>
          @endif
          <li class="breadcrumb-item active" aria-current="page">{{ $title3 }}</li>
        </ol>
      </nav>
</div>
