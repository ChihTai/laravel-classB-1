@switch($main)
  @case("ad")
    @include("admin.ad")
  @break
  @case("mvim")
    @include("admin.mvim")
  @break
  @case("image")
   @include("admin.image")
  @break
  @case("total")
   @include("admin.total")
  @break
  @case("bottom")
   @include("admin.bottom")
  @break
  @case("news")
   @include("admin.news")
  @break
  @case("admin")
    @include("admin.admin")
  @break
  @case("menu")
   @include("admin.menu")
  @break
  @default
   @include("admin.title")
  @break
@endswitch
