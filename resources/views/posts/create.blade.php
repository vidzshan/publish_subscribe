<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <textarea name="content" rows="4" cols="50" placeholder="Write your message"></textarea>
    <button type="submit">Publish</button>
</form>
<h1>Hello post</h1>
