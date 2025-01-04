<!-- resources/views/article/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <link rel="stylesheet" href="//demo.productionready.io/main.css" />
</head>
<body>
    <div class="article-page">
        <div class="container page">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-xs-12">
                    <h1>{{ $article->title }}</h1>
                    <h3>{{ $article->subtitle }}</h3>
                    <p>{{ $article->content }}</p>
                    <ul class="tag-list">
                        @foreach(explode(',', $article->tags) as $tag)
                            <li class="tag-default tag-pill tag-outline">{{ $tag }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Edit Article</a>
                    <form action="{{ route('article.destroy', $article->id) }}" method="POST" style="display:inline;"> 
                      @csrf @method('DELETE') 
                      <button class="btn btn-danger" type="submit">Delete Article</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
