<div class="col-md-4">
    <ul class="list-group">
        <li class="list-group-item"><a href="{{ URL::to('home') }}">{{ Lang::get('admin.dashboard_title') }}</a></li>
        <li class="list-group-item"><a href="{{ URL::to('project') }}">{{ Lang::get('project.module_title') }}</a></li>
        <li class="list-group-item"><a href="{{ URL::to('word') }}">{{ Lang::get('word.module_title') }}</a></li>
        <li class="list-group-item"><a href="{{ URL::to('tool/wizard') }}">{{ Lang::get('tool.word_copy_wizard') }}</a></li>        
    </ul>
</div>