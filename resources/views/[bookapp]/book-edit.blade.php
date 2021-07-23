<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book App</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-700 text-gray-200 text-left text-2xl flex flex-col justify-center h-screen items-center ">
    @if (Session::has('message'))
<div class="w-full bg-green-500 border-4 border-green-800 text-green-50 text-md text-center">
    {{Session::get('message')}}
</div>
    @endif
    <form action="{{ route('book.update', ['id'=>$item->id]) }}" method="POST"
        class='flex flex-col gap-4 p-2 m-2 w-2/6  p-10 shadow-2xl '>
        @csrf
        <label>Name of Book</label>
        <input type="text" name="name" placeholder="type here" value={{$item->name}}
            class='text-sm bg-gray-700 p-2 border border-bg-gray-600 hover:border-blue-500 '>
        @if ($errors->has('name'))
            <span class="border border-red-500 text-red-300 text-sm">{{ $errors->first('name') }}</span>
        @endif
        <label>Description of the Book</label>
        <input type="text" name="name" placeholder="type here" value={{$item->description}}
            class='text-sm bg-gray-700 p-2 border border-bg-gray-600 hover:border-blue-500 '>
            @if ($errors->has('description'))
            <span class="border border-red-500 text-red-300 text-sm">{{ $errors->first('description') }}</span>
        @endif
        <label>Category</label>
        <select name="category" id="" class='bg-gray-700 p-2 border border-bg-gray-600 hover:border-blue-500 uppercase'>
            <option value="" disabled class='' selected>{{$item->category}}</option>
            <option value="fictional">fictional</option>
            <option value="biography">biography</option>
            <option value="comedy">comedy</option>
        </select>
        @if ($errors->has('category'))
            <span class="border border-red-500 text-red-300 text-sm">{{ $errors->first('category') }}</span>
        @endif
        <button type="submit" class="p-2 bg-green-500 hover:bg-green-800 text-green-200 rounded-lg mt-4">Submit</button>
    </form>
</body>

</html>
