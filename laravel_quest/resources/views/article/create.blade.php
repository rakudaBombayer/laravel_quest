<!-- resources/views/article/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <link rel="stylesheet" href="//demo.productionready.io/main.css" />
</head>
<body>
    <div class="editor-page">
        <div class="container page">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-xs-12">
                    <ul class="error-messages">
                        <!-- エラーメッセージがあればここに表示 -->
                    </ul>

                    <form action="{{ route('article.store') }}" method="POST">
                        @csrf
                        <fieldset>
                            <fieldset class="form-group">
                                <input type="text" name="title" class="form-control form-control-lg" placeholder="Article Title" required />
                            </fieldset>
                            <fieldset class="form-group">
                                <input type="text" name="subtitle" class="form-control" placeholder="What's this article about?" />
                            </fieldset>
                            <fieldset class="form-group">
                                <textarea name="content" class="form-control" rows="8" placeholder="Write your article (in markdown)" required></textarea>
                            </fieldset>
                            <fieldset class="form-group">
                                <input type="text" name="tags" class="form-control" placeholder="Enter tags" />
                                <div class="tag-list">
                                    <span class="tag-default tag-pill"> <i class="ion-close-round"></i> tag </span>
                                </div>
                            </fieldset>
                            <button class="btn btn-lg pull-xs-right btn-primary" type="submit">
                                Publish Article
                            </button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
