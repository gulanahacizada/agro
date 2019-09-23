import { Component, OnInit } from '@angular/core';
import { MembersService } from './services/members.service';
import { Response } from 'src/app/interfaces/response';

@Component({
  selector: 'app-members',
  templateUrl: './members.component.html',
  styleUrls: ['./members.component.scss']
})
export class MembersComponent implements OnInit {
  
  membersList: any;

  constructor(
   public memberService: MembersService
  ) { }

  ngOnInit() {
    this.getMembers();
  }

  getMembers() {
    this.memberService.getAllUsers().subscribe((response: Response) => {
      console.log(response.responseContent.data);
      this.membersList = response.responseContent.data;
    });
  }

}
