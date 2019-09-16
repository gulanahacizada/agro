import { Component, OnInit, ChangeDetectorRef, AfterViewInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators,  FormArray, } from '@angular/forms';
import { Router } from '@angular/router';
import { ProfileService } from '../../services/profile.service';
import { Response } from 'src/app/interfaces/response';
import { UserInfo } from 'src/app/interfaces/userInfo';

@Component({
  selector: 'app-profileSettings',
  templateUrl: './profileSettings.component.html',
  styleUrls: ['./profileSettings.component.scss']
})
export class ProfileSettingsComponent implements OnInit, AfterViewInit {

  isCompany = localStorage.getItem('isCompany');
  updateUserForm: FormGroup;
  userInfo: UserInfo;
  phones = [];
  emails = [];

  constructor(
    private cd: ChangeDetectorRef,
    private profileService: ProfileService,
    private fb: FormBuilder,
    private router: Router,
  ) { }

  ngOnInit() {
    this.getUser();
    this.createUserForm();
  }

  ngAfterViewInit() {
    this.cd.detectChanges();
  }

  returnAdmin() {
    if (+this.isCompany == 1) {
      return true;
    } else {
      return false;
    }
  }

  getUser() {
    this.profileService.getUserInfo().subscribe((response: Response) => {
        this.userInfo = response.responseContent;
        this.phones = this.userInfo.contacts.filter(e => e.type == 0);
        this.emails = this.userInfo.contacts.filter(e => e.type == 1);
        this.emails.forEach(el => {
          this.email.push(this.createEmailFormData(el));
        });
        this.phones.forEach(el => {
          this.phone.push(this.createPhoneFormData(el));
        });
        this.updateUserForm.patchValue({
            bank_account: this.userInfo.bank_account,
            description: this.userInfo.description,
            name: this.userInfo.name,
            voen: this.userInfo.voen,
            website: this.userInfo.website,
            role: this.userInfo.role,
            is_company: this.userInfo.is_company,
        });
        // console.log(this.updateUserForm.value);

    });
  }

  createUserForm() {
    this.updateUserForm = this.fb.group({
      bank_account: [''],
      description:  [''],
      name:         [''],
      voen:         [''],
      website:      [''],
      role:         [],
      is_company:   [],
      email:        this.fb.array([this.createEmailArray()]),
      phone:        this.fb.array([this.createPhonelArray()])
    });
    if (this.updateUserForm.value.email.length < 0) {
      this.email.push(this.createEmailArray());
    } else {
      this.resetData();
    }

    if (this.updateUserForm.value.phone.length < 0) {
      this.phone.push(this.createPhonelArray());
    } else {
      this.resetData();
    }
  }

  submitForm() {
    const tEmail = [];
    const tPhone = [];
    this.updateUserForm.value.email.forEach(element => {
      tEmail.push(element.contact);
    });
    this.updateUserForm.value.phone.forEach(element => {
      tPhone.push(element.contact);
    });
    this.updateUserForm.value.phone = tPhone;
    this.updateUserForm.value.email = tEmail;
    this.clean(this.updateUserForm.value);
    this.profileService.userInfoUpdate(this.updateUserForm.value).subscribe( () => {
      this.router.navigate(['/dashboard']);
    });

  }

  clean(obj) {
    for (const propName in obj) {
      if (obj[propName] === null || obj[propName] === undefined || obj[propName] === "" || obj[propName][0] == [""]) {
        delete obj[propName];
      }
    }
  }


  createEmailArray(): FormGroup {
    return this.fb.group({
      contact: ['']
    });
  }

  createEmailFormData(data: any): FormGroup {
    return this.fb.group({
      contact: data.contact
    });
  }

  createPhoneFormData(data: any): FormGroup {
    return this.fb.group({
      contact: data.contact
    });
  }



  get email() {
    return this.updateUserForm.get('email') as FormArray;
  }

  addEmail(): void {
    this.email.push(this.createEmailArray());
  }


  createPhonelArray(): FormGroup {
    return this.fb.group({
      contact: ['']
    });
  }

  get phone() {
    return this.updateUserForm.get('phone') as FormArray;
  }

  addPhone(): void {
    this.phone.push(this.createPhonelArray());
  }

  resetData() {
    while (this.email.length > 0) {
      this.email.removeAt(0);
    }
    while (this.phone.length > 0) {
      this.phone.removeAt(0);
    }
  }


}
