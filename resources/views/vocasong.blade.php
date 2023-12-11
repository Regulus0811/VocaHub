<style>
    .container {
        margin-top: 100px;
    }
</style>

 @include('mainpage.header')

 <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-8">
       <div class="card">
         <div class="card-header">게시판</div>

         <div class="card-body">
              <table class="table">
                 <thead>
                <tr>
                  <th scope="col">번호</th>
                  <th scope="col">제목</th>
                  <th scope="col">작성자</th>
                  <th scope="col">작성일</th>
                  <th scope="col">조회수</th>
                </tr>
                 </thead>
                 <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                  <td>@mdo</td>
                </tr>
                 </tbody>
              </table>
         </div>
       </div>
     </div>
   </div>
 </div>

 @include('mainpage.footer')
