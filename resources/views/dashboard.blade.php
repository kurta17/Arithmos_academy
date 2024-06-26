<x-site-layout title='Dashboard'>
  <div class="flex flex-wrap">
  
    <div class="w-full md:w-1/3 p-4">
      <div class="bg-white rounded-lg shadow-md p-5">
        <h1 class="font-bold text-xl mb-3">Take a Test</h1>
        <img src="start-test.png" alt="Test Image" class="mb-3">
        <a href="{{ route('test') }}" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Start Test</a>
        <a href="{{ route('questionstrieds.show', auth()->user()->id) }}" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Solved</a>      </div>
    </div>

    <div class="w-full md:w-1/3 p-4">
      <div class="bg-white rounded-lg shadow-md p-5">
        <h1 class="font-bold text-xl mb-3">Contact Me</h1>
        <img src="contact-me.png" alt="Contact Image" class="mb-3">
        <a href="{{ route('contact.show') }}" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Contact</a>
      </div>
    </div>


    <div class="w-full md:w-1/3 p-4">
      <div class="bg-white rounded-lg shadow-md p-5">
        <h1 class="font-bold text-xl mb-3">Create a Question</h1>
        <img src="create-question.png" alt="Question Image" class="mb-3">
        <a href="{{ route('question.create') }}" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Create</a>
      </div>
    </div>
  </div>
</x-site-layout>
