<?php include 'config.php';?>
<header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Cover</h3>
      <nav id="app-navbar" class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" id="index" aria-current="page" href="/<?php  echo APP_NAME ?>">Home</a>
        <a class="nav-link" id="features" href="/<?php  echo APP_NAME ?>/Features.php">Features</a>
        <a class="nav-link" id="contact" href="/<?php  echo APP_NAME ?>/Contact.php">Contact</a>
      </nav>
    </div>
  </header>
<script>
  const APP_NAME = '<?php  echo APP_NAME ?>'
  const pathName = function() {
    const { pathname } = new URL(location.href)
    let path = pathname.replace('/'+APP_NAME,'').replace('.php','').replace('/','')
    if(path === '') path = 'index'
    return path.toLowerCase()
  }
  const path = pathName()
  const el = document.getElementById('app-navbar').children
  for (let i = 0; i < el.length; i++) {
    const item = el[i]
    if (item.id === path) {
      item.classList.add('active')
    }
  } 
</script>