
<div class="filter card">

    <div class="card-header" id="filterHeading">
        <button class="btn btn-sm btn-secondary mb30 mt20" type="button" data-toggle="collapse" data-target="#filterCollapse" aria-expanded="false" aria-controls="filterCollapse">
            Filter
        </button>
    </div>

    <div id="filterCollapse" class="collapse" aria-labelledby="filterHeading" data-parent="#accordion">
       <div class="pretty-border">
           <div class="card-body">

               <form action="/posts" method="get" class="filter-options">
                   <ul class="when-posted">
                       <li>
                           <label class="container">
                               <input type="radio" name="oldest" value="0" {{ request('oldest') == 0 ? 'checked' : '' }}>
                               <span class="radio"></span>
                               Most Recent
                           </label>
                       </li>
                       <li>
                           <label class="container">
                               <input type="radio" name="oldest" value="1" {{ request('oldest') == 1 ? 'checked' : '' }}>
                               <span class="radio"></span>
                               Oldest
                           </label>
                       </li>
                   </ul>


                   <ul class="posted-by">
                       <div class="row">
                           <li>
                               <label class="container">
                                   <input type="checkbox" name="user_id[amanda]" value="1" {{ isset($_GET['user_id']['amanda']) && $_GET['user_id']['amanda'] == 1 ? 'checked' : '' }}>
                                   <span class="checkbox"></span>
                                   Amanda
                               </label>
                           </li>
                           <li>
                               <label class="container">
                                   <input type="checkbox" name="user_id[des]" value="5" {{ isset($_GET['user_id']['des']) && $_GET['user_id']['des'] == 5 ? 'checked' : '' }}>
                                   <span class="checkbox"></span>
                                   Des
                               </label>
                           </li>
                       </div>
                       <div class="row">
                           <li>
                               <label class="container">
                                   <input type="checkbox" name="user_id[mozzie]" value="9" {{ isset($_GET['user_id']['mozzie']) && $_GET['user_id']['mozzie'] == 9 ? 'checked' : '' }}>
                                   <span class="checkbox"></span>
                                   Mozzie
                               </label>
                           </li>
                           <li>
                               <label class="container">
                                   <input type="checkbox" name="user_id[nessie]" value="10" {{ isset($_GET['user_id']['nessie']) && $_GET['user_id']['nessie'] == 10 ? 'checked' : '' }}>
                                   <span class="checkbox"></span>
                                   Nessie
                               </label>
                           </li>
                       </div>
                   </ul>

               <div class="filter-btn">
                   <button class="btn btn-sm btn-secondary" type="submit">
                       Filter
                   </button>
               </div>

               </form>

           </div>
       </div>

    </div>
</div>