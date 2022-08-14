// You are given the heads of two sorted linked lists list1 and list2.

// Merge the two lists in a one sorted list. The list should be made by splicing together the nodes of the first two lists.

// Return the head of the merged linked list.

// Input: list1 = [1,2,4], list2 = [1,3,4]
// Output: [1,1,2,3,4,4]
// Example 2:

// Input: list1 = [], list2 = []
// Output: []
// Example 3:

// Input: list1 = [], list2 = [0]
// Output: [0]

/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode} list1
 * @param {ListNode} list2
 * @return {ListNode}
 */
 list1 = [1,2,4];list2 = [1,3,4];
 var mergeTwoLists = function  (list1, list2) {
    if (list1 == null)
      return list2;
  if (list2 == null)
      return list1;
let list;
  if (list1.val < list2.val) {
      list = new ListNode(list1.val);
      list.next = mergeTwoLists(list1.next, list2);
  } else {
       list = new ListNode(list2.val);
      list.next = mergeTwoLists(list2.next,list1);
  }
    return list
};
