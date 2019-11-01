import { Component, OnInit } from '@angular/core';
import { ContactUsService } from './services/contact-us.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Response } from 'src/app/interfaces/response';
import { Router } from '@angular/router';
import { TranslateService } from '@ngx-translate/core';

@Component({
  selector: 'app-contact-us',
  templateUrl: './contact-us.component.html',
  styleUrls: ['./contact-us.component.scss']
})
export class ContactUsComponent implements OnInit {

  requestForm: FormGroup;

  constructor(
    public contactService: ContactUsService,
    public fb: FormBuilder,
    public router: Router,
    public translate: TranslateService
  ) {   this.translate.setDefaultLang(localStorage.getItem('lang')); }

  ngOnInit() {
    this.createForm();
  }

  createForm() {
    this.requestForm = this.fb.group({
      body: ['', Validators.required],
      email: ['', Validators.required],
      name: ['', Validators.required]
    });
  }

  onSubmit() {
    if (this.requestForm.valid) {
      this.contactService.sendRequest(this.requestForm.value).subscribe((response: Response) => {    
        if (response.responseCode == 1) {
          this.router.navigate(['/home']);
        }
      });
    }
  }

}
