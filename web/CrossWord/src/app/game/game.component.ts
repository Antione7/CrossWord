import {Component, OnInit} from '@angular/core';

import {GameService} from './shared/game.service';
import {Word} from "./shared/word.model";

@Component({
    selector: 'game',
    templateUrl: './game.component.html'
})
export class GameComponent implements OnInit {
    
    word: Word =  new Word();

    constructor(private gameService: GameService) {
    }

    ngOnInit() {
        this.gameService.getWord().subscribe(data => {
            console.log(data);
            this.word = data;
            
        });
            
    }

}


