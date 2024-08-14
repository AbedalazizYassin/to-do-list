@csrf

            <div class="form-group">
                <label for="title">عنوان المشروع</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$project->title}}">
               
            </div>
            <div style="height: 20px"></div>
            <div class="form-group">
                <label for="description">وصف المشروع</label>
                <textarea name="description" id="description" class="form-control" >{{$project->description }}</textarea>
               
            </div>
            <div style="height: 20px"></div>