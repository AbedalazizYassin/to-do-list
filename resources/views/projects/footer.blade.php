<div class="card-footer" dir="rtl">
    <div class="d-flex">
        <div class="d-flex align-items-center">
            <img src="/images/clock.svg" alt="">
            <div class="mr-2">
                {{  $project->created_at->diffForHumans()  }}
            </div>
            
        </div>
        <div style="width: 10px"></div>

        <div class="d-flex align-items-center">
            <img src="/images/list-check.svg" alt="">
            <div class="mr-2">
                
                {{count($project->tasks)}}
            </div>

        </div>
        <div style="width: 10px"></div>
        <div class="d-flex align-items-center mr-auto">
            <form action="projects/{{$project->id}}" method="POST">
            @method('DELETE')
            @csrf
            <input  type="submit" class="btn-delete" value="&#x1F5D1;">
        </form>
    </div>


    </div>
</div>