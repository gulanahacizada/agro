import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AgronomsComponent } from '../agronoms.component';
import { AgronomDetailComponent } from '../components/agronom-detail/agronom-detail.component';

const routes: Routes = [
  {
    path: '',
    component: AgronomsComponent
  },
  {
    path: 'detail/:id',
    component: AgronomDetailComponent
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AgronomsRoutingModule { }
