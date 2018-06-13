  
<div class="vertical-us">  
    <ul class=" nav-stacked">
            <li class="{{Request::is('finance') ? 'active': ''}}">
                <a href="{{url('finance')}}"  aria-expanded="false">
                    <span class="visible-xs"></span>
                    <span class="hidden-xs">Exchange</span>
                </a>
            </li>

            <li class="{{Request::is('finance') ? 'active': ''}}">
                <a href="{{url('finance')}}"  aria-expanded="false">
                    <span class="visible-xs"></span>
                    <span class="hidden-xs">Accounts</span>
                </a>
            </li>

    </ul>
</div>

      