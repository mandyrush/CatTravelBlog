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
                       <?php if(! isset($_GET["oldest"])) : ?>
                       <li>
                           <label class="container">
                               <input type="radio" name="oldest" value="0" checked="checked">
                               <span class="radio"></span>
                               Most Recent
                           </label>
                       </li>
                       <li>
                           <label class="container">
                               <input type="radio" name="oldest" value="1">
                               <span class="radio"></span>
                               Oldest
                           </label>
                       </li>
                       <?php elseif($_GET["oldest"] === "0") : ?>
                           <li>
                               <label class="container">
                                   <input type="radio" name="oldest" value="0" checked="checked">
                                   <span class="radio"></span>
                                   Most Recent
                               </label>
                           </li>
                           <li>
                               <label class="container">
                                   <input type="radio" name="oldest" value="1">
                                   <span class="radio"></span>
                                   Oldest
                               </label>
                           </li>
                       <?php elseif($_GET["oldest"] === "1") : ?>
                           <li>
                               <label class="container">
                                   <input type="radio" name="oldest" value="0">
                                   <span class="radio"></span>
                                   Most Recent
                               </label>
                           </li>
                           <li>
                               <label class="container">
                                   <input type="radio" name="oldest" value="1" checked="checked">
                                   <span class="radio"></span>
                                   Oldest
                               </label>
                           </li>
                       <?php endif ?>
                   </ul>


                   <ul class="posted-by">
                       <div class="row">
                           <li>
                               <label class="container">
                                   <input type="checkbox" name="user_id[amanda]" value="1">
                                   <span class="checkbox"></span>
                                   Amanda
                               </label>
                           </li>
                           <li>
                               <label class="container">
                                   <input type="checkbox" name="user_id[des]" value="5">
                                   <span class="checkbox"></span>
                                   Des
                               </label>
                           </li>
                       </div>
                       <div class="row">
                           <li>
                               <label class="container">
                                   <input type="checkbox" name="user_id[mozzie]" value="7">
                                   <span class="checkbox"></span>
                                   Mozzie
                               </label>
                           </li>
                           <li>
                               <label class="container">
                                   <input type="checkbox" name="user_id[nessie]" value="8">
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