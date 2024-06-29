# 變化題型模擬

## 參與人數批量新增
### 除了單一資料新增外，也有可能是提供純文字的email清單，以逗號或分號的方式區隔，要求以此為基礎進行大量的新增，再搭配單一新增來完善整個新增參與人員的機制。
#### 參考做法：
1. 建立一個 `textarea` 區域
2. 將內容傳送到後端，**ajax** 或 **form post** 都可以
3. 清理資料(如果提供的資料有斷行符號，需移除或取代)
4. 分割資料為陣列(explode)
5. 迴圈新增資料

## 參與人員管理


## 意見調查紀錄LOG

## 接駁車分派紀錄LOG

## 補充軟刪除硬刪除的觀念
對於重要的資料比如訂單或機密資料，系統通常不會做真的刪除，而是在資料表中加一個欄位做為註記；
當這個欄位為1時，表示資料已被刪除，當欄位為0時，表示資料是可以取用的。
當系統中使用軟刪除的機制時：
讀取資料:
```sql
//取出所有可以使用的資料
SELECT * FROM table WHERE `del`=0;
``` 
刪除資料:
```sql
//透過改變del欄位的值來代表這筆資料被刪除了
UPDATE table SET `del`=1 WHERE `id`=9;
```