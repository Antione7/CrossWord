import {Component, OnInit} from '@angular/core';

import {GameService} from './shared/game.service';

@Component({
    selector: 'game',
    templateUrl: './game.component.html'
})
export class GameComponent implements OnInit {

    constructor(private gameService: GameService) {
    }

    ngOnInit() {
        this.gameService.getWord().subscribe(data => console.log(data));
    }

}


