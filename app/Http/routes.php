<?php

// Using Lumen 5.2
// Vue.js 1.0.16

$app->get('/all', function () use ($app) {
  return \App\Task::all();
});

$app->post('/task/{id}', function (\Illuminate\Http\Request $request, $id) use ($app) {
  $task = \App\Task::find($id);
  $task->update($request->all());
  return $task;
});

$app->post('/create', function (\Illuminate\Http\Request $request) use ($app) {
  return \App\Task::create($request->all());
});
