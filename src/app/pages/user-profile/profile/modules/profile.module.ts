import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {TabViewModule} from 'primeng/tabview';
import { ProfileRoutingModule } from './profile-routing.module';
import { ProfileComponent } from '../profile.component';
import { ProfileSettingsComponent } from '../components/profileSettings/profileSettings.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import {EditorModule} from 'primeng/editor';

@NgModule({
  declarations: [
    ProfileComponent,
    ProfileSettingsComponent
  ],
  imports: [
    CommonModule,
    TabViewModule,
    ProfileRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    EditorModule
  ]
})
export class ProfileModule { }
