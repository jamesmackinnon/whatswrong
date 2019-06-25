 <template>
     <div>
         <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
             <div class="container">
                 <router-link :to="{name: 'home'}" class="navbar-brand">WhatsWrong</router-link>

                 <button class="navbar-toggler" type="button" data-toggle="collapse"
                     data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <!-- Left Side Of Navbar -->
                     <ul class="navbar-nav mr-auto"></ul>
                     <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-link">
                             <router-link :to="{name: 'diagnose'}">Diagnose</router-link>
                         </li>
                         <li class="nav-link">
                             <router-link :to="{name: 'import'}">Import Data</router-link>
                         </li>

                     </ul>
                 </div>
             </div>
         </nav>
         <main class="py-4">
             <router-view></router-view>
         </main>
     </div>
 </template>

 <script>
     export default {}

 </script>
