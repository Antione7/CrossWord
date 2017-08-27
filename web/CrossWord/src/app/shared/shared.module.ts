import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {FormsModule} from '@angular/forms';
import {HttpModule} from '@angular/http';

import {BaseService} from './base.service';

@NgModule({
    imports: [CommonModule, FormsModule, HttpModule],
    declarations: [],
    exports: [CommonModule, FormsModule, HttpModule],
    providers: [BaseService]
})
export class SharedModule {}