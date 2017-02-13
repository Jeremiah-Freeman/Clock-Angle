| Behavior | Input | Output |
|----------|-------|--------|
| User inputs coordinates larger than chess board | [10, 1] | "Coordinates are too big" |
| User enters two coordinates that are in same position | [1,3] , [1,3] | "They're in the same spot" |
| User enters two coordinates | [0,3] , [0,4] | "true" |
| User enters two coordinates | [1,3] , [0,3] | "true" |
| User enters two coordinates | [0,0] , [1,1] | "true" |
| User enters two coordinates | [0,1] , [2,5] | "false" |
