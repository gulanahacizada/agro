import { Component, OnInit } from '@angular/core';
import { AppService } from './services/app/app.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { JwtHelperService } from '@auth0/angular-jwt';
import { Router, NavigationEnd } from '@angular/router';
import { TranslateService } from '@ngx-translate/core';
import * as $ from 'jquery';
import { Response } from './interfaces/response';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit {
  activeLang: any;
  activeClass: boolean;
  az: boolean;
  en: boolean;
  ru: boolean;
  registerToken: any;
  title = 'Birja';
  loginForm: FormGroup;
  verifyForm: FormGroup;
  companyRegister: FormGroup;
  customerRegister: FormGroup;
  jwtHelper = new JwtHelperService();
  myCarouselImages: any;
  currencyResponse: any;
  prodStatResponse: any;
  metalResponse: any;
  responseMessage: any;
  verifyPhone = false;
  verifyEmail = false;
  verifyID: any;
  verifyToken: any;

  constructor(
    private appService: AppService,
    private fb: FormBuilder,
    private router: Router,
    private translate: TranslateService
  ) {
    if (!localStorage.getItem('lang')) {
      localStorage.setItem('lang', 'az');
    }
    this.translate.setDefaultLang(localStorage.getItem('lang'));
    this.myCarouselImages = [1, 2, 3, 4, 5, 6].map((i) => `https://picsum.photos/640/480?image=${i}`);
  }

  ngOnInit() {
    this.createLoginForm();
    this.createCompanyForm();
    this.createCustomerForm();
    this.createVerifyForm();
    this.loggedIn();
    this.getMetals();
    this.getCurrency();
    this.chekLang();
    this.getProductsStat();
    this.router.events.subscribe((evt) => {
      if (!(evt instanceof NavigationEnd)) {
        return;
      }
      window.scrollTo(0, 0);
    });
  }


createLoginForm() {
  this.loginForm = this.fb.group({
    username: ['', [Validators.required]],
    password: ['', [Validators.required]],
    // navigatorUrl: ['home']
  });
}

createCompanyForm() {
  this.companyRegister = this.fb.group({
    name: ['', Validators.required],
    username: ['', Validators.required],
    password: ['', Validators.required],
    confirmPassword: ['', Validators.required],
    is_company: [1],
    role: [3, Validators.required],
    email: [''],
    phone: ['+994'],
    verify: ['', Validators.required],
    voen: ['', Validators.required]
  },
    { validator: this.passwordMatchValidator });
}
passwordMatchValidator(g: FormGroup) {
  return g.get('password').value === g.get('confirmPassword').value ? null : { mismatch: true };
}

createCustomerForm() {
  this.customerRegister = this.fb.group({
    name: ['', Validators.required],
    username: ['', Validators.required],
    password: ['', Validators.required],
    confirmPassword: ['', Validators.required],
    is_company: [0],
    role: [1, Validators.required],
    email: [''],
    phone: ['+994'],
    verify: ['', Validators.required]
  },
    { validator: this.passwordMatchValidator });
}

login() {
  if (this.loginForm.valid) {
    const data = Object.assign({}, this.loginForm.value);
    this.appService.login(data).subscribe((response: Response) => {
      if (response.responseCode == 1) {
        localStorage.setItem('jwt_c', response.responseContent.access_token);
        localStorage.setItem('isCompany', response.responseContent.user.is_company);
        localStorage.setItem('selfID', response.responseContent.user.id);
        this.router.navigate(['dashboard']);
        $('.login-modal').removeClass('open');
        $('body').removeClass('o-hidden');
      }
      if (response.responseCode == 2) {
        // message error
        // localStorage.setItem('verifyToken', response.responseContent.access_token);
      }
      if (response.responseCode == 3) {
        // message
      }
      if (response.responseCode == 10) {

        if (response.responseContent.type == 0) {
          this.verifyPhone = true;
          this.verifyEmail = false;
          console.log(this.verifyPhone);
          this.verifyID = response.responseContent.id;
          localStorage.setItem('verifyID', this.verifyID);
        } else {
          this.verifyPhone = false;
          this.verifyEmail = true;
          console.log(this.verifyPhone);
        }
      }
    });
  }
}

registerCompany() {
  if (this.companyRegister.valid) {
    const data = Object.assign({}, this.companyRegister.value);
    this.clean(data);
    this.appService.register(data).subscribe((response: Response) => {
      if (response.responseCode == 2) {
        this.responseMessage = response.responseMessage;
      }
      if (response.responseCode == 10) {
        if (response.responseContent.type == 0) {
          this.verifyPhone = true;
          this.verifyEmail = false;
          this.verifyID = response.responseContent.id;
          localStorage.setItem('verifyID', this.verifyID);
        } else {
          this.verifyPhone = false;
          this.verifyEmail = true;
        }
      }
    }
    );
  }
}

registerCustomer() {
  if (this.customerRegister.valid) {
    const data = Object.assign({}, this.customerRegister.value);
    this.clean(data);
    console.log(data);
    this.appService.register(data).subscribe((response: Response) => {
      if (response.responseCode == 2) {
        this.responseMessage = response.responseMessage;
      }
      if (response.responseCode == 10) {
        if (response.responseContent.type == 0) {
          this.verifyPhone = true;
          this.verifyEmail = false;
          this.verifyID = response.responseContent.id;
          localStorage.setItem('verifyID', this.verifyID);
        } else {
          this.verifyPhone = false;
          this.verifyEmail = true;
        }
      }
    }
    );
  }
}

logOut() {
  this.appService.logout().subscribe((response: Response) => {
    if (response.responseCode == 1) {
      localStorage.removeItem('jwt_c');
      localStorage.removeItem('isCompany');
      localStorage.removeItem('selfID');
      this.router.navigate(['/home']);
    }
  });
}

loggedIn() {
  const token = localStorage.getItem('jwt_c');
  return !this.jwtHelper.isTokenExpired(token);
}

useLanguage(language: string) {
  this.translate.use(language);
  localStorage.setItem('lang', language);
  window.location.reload();
}

getCurrency() {
  this.appService.currency().subscribe((response: Response) => {
    if (response.responseCode) {
      this.currencyResponse = response.responseContent;
    }
  });
}

getMetals() {
  this.appService.metals().subscribe((response: Response) => {
    if (response.responseCode == 1) {
      this.metalResponse = response.responseContent;
    }
  });
}

getProductsStat() {
  this.appService.getProdStat().subscribe((response: Response) => {
    if (response.responseCode == 1) {
      this.prodStatResponse = response.responseContent;
    }
  });
}

clean(obj) {
  for (const propName in obj) {
    if (obj[propName] === null || obj[propName] === undefined || obj[propName] === "" || obj[propName][0] == [""]) {
      delete obj[propName];
    }
  }
}


createVerifyForm() {
  this.verifyForm = this.fb.group({
    code: ['', Validators.required]
  });
}

submitVerifyForm() {
  this.verifyToken = localStorage.getItem('verifyToken');
  this.appService.verify(this.verifyForm.value).subscribe((response: Response) => {
    if (response.responseCode == 1) {
      $('.login-modal').removeClass('open');
      $('.registration-modal').removeClass('open');
      $('body').removeClass('o-hidden');
      this.verifyPhone = false;
    }
  });
}

resendCode() {
  this.verifyID = localStorage.getItem('verifyID');
  this.appService.resendCode( {id: this.verifyID} ).subscribe( (response: Response) => {});
}

chekLang() {
  this.activeLang = localStorage.getItem('lang');
  this.az = (this.activeLang == 'az') ? true : false;
  this.en = (this.activeLang == 'en') ? true : false;
  this.ru = (this.activeLang == 'ru') ? true : false;
}


reset() {
  this.verifyEmail = false;
  this.verifyPhone = false;
}

top() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
});
}

}


