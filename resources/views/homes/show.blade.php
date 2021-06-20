@extends('app')
@section('something')
<div class="panel panel-default">
                  <div class="panel-head">
                     <h4 class="text-center">Show Student Form</h4>
                  </div>
                  <div class="panel-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Age</th>
                              <th>Class</th>
                              <th>Roll</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>John</td>
                              <td>john@example.com</td>
                              <td>17</td>
                              <td>12</td>
                              <td>13</td>
                           </tr>
                           <tr>
                              <td>Mary</td>
                              <td>mary@example.com</td>
                              <td>12</td>
                              <td>7</td>
                              <td>4</td>
                           </tr>
                           <tr>
                              <td>July</td>
                              <td>july@example.com</td>
                              <td>8</td>
                              <td>3</td>
                              <td>10</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
@endsection