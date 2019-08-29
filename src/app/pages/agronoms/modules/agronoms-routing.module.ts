import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AgronomsComponent } from '../agronoms.component';

const routes: Routes = [
  {
    path: '',
    component: AgronomsComponent
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AgronomsRoutingModule { }
