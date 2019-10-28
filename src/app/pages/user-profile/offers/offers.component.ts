import { Component, OnInit } from '@angular/core';
import { OffersService } from './services/offers.service';
import { Response } from 'src/app/interfaces/response';
import { SelectItem } from 'primeng/components/common/selectitem';

@Component({
  selector: 'app-offers',
  templateUrl: './offers.component.html',
  styleUrls: ['./offers.component.scss']
})
export class OffersComponent implements OnInit {

  dialogType: SelectItem[];
  dialogReadType: SelectItem[];
  selectReadType = '';
  selectDialogType = '';
  offersList: any;

  constructor(
    public offersService: OffersService
  ) {
    this.dialogType = [
      { label: 'Gələn təkliflər', value: 'to' },
      { label: 'Göndərilən təkliflər', value: 'from' },
    ];
    this.dialogReadType = [
      { label: 'Gözlənilmədə', value: '2' },
      { label: 'Razılaşmış təkliflər', value: '1' },
      { label: 'Rəd ədilmiş təkliflər', value: '0' },
    ];
  }

  ngOnInit() {
    this.getAllDialogs();
  }

  onSelectType(event) {
    this.selectReadType = event.value;
    this.getAllDialogs();
  }

  onSelectDialogType(event) {
    this.selectDialogType = event.value;
    this.getAllDialogs();
  }

  getAllDialogs() {
    this.offersService.getAllDialogs({ status: this.selectReadType, direction: this.selectDialogType }).subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.offersList = response.responseContent.data;
      }
    });
  }

}
